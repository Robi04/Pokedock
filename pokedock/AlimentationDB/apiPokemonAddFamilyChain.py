import json

with open('pokemons_full_details_updated.json', 'r') as file:
    pokemons = json.load(file)

for index, pokemon in enumerate(pokemons):
    if index - 1 != -1:
        if pokemons[index]['family'] == pokemons[index-1]['family']:
            pokemons[index]['evolve_from'] = pokemons[index-1]['id']
        else:
            pokemons[index]['evolve_from'] = ""
    else:
        pokemons[index]['evolve_from']= ""
    if index + 1 < len(pokemons):
        if pokemons[index]['family'] == pokemons[index+1]['family']:
            pokemons[index]['evolve_to'] = pokemons[index+1]['id']
        else:
            pokemons[index]['evolve_to'] = ""
    

# On save dans le json
with open('pokemons_full_details_updated_fam_chained.json', 'w') as file:
    json.dump(pokemons, file, indent=4)