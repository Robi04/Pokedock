import requests
import json

def get_pokemon_info(pokemon_name):
    # URL de l'api
    url = f"https://pokeapi.co/api/v2/pokemon/{pokemon_name.lower()}"

    # Check connexion
    response = requests.get(url)
    if response.status_code == 200:
        data = response.json()

        # On get les infos basic + species_url pour trouver la famille (relou)
        name = data["name"]
        types = [t["type"]["name"] for t in data["types"]]
        species_url = data["species"]["url"]

        # Mic mac pour toruver la famille (c'est du chatgpt ça)
        species_response = requests.get(species_url)
        family = "Unknown"
        if species_response.status_code == 200:
            species_data = species_response.json()
            evolution_chain_url = species_data["evolution_chain"]["url"]
            evolution_chain_response = requests.get(evolution_chain_url)
            if evolution_chain_response.status_code == 200:
                evolution_chain_data = evolution_chain_response.json()
                family = evolution_chain_data["chain"]["species"]["name"]

        return {
            "Name": name,
            "Types": types,
            "Family": family,
        }
    else:
        return "Pokemon not found"


if __name__ == '__main__':
    # Load des nom des pokemons que j'avais get avant (juste id et nom)
    with open('pokemons.json', 'r') as file:
        pokemon_data = json.load(file)

    pokemons_full_details = []

    # On rajoute les info
    for pokemon in pokemon_data:
        pokemon_info = get_pokemon_info(pokemon['name'])
        pokemons_full_details.append({"id":pokemon['id'],"name":pokemon_info['Name'],'types':pokemon_info['Types'],'family':pokemon_info['Family']})

    with open('pokemons_full_details.json', 'w') as file:
        json.dump(pokemons_full_details, file, indent=4)