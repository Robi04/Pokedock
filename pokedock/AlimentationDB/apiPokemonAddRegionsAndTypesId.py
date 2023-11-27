import json

# Load les json en tant que dictionnaire
def load_json(filename):
    with open(filename, 'r') as file:
        return json.load(file)


if __name__ == '__main__':
    # On get les json déjà existants
    pokemons = load_json('pokemons_full_details.json')
    types = load_json('types.json')

    # On get les name et id de chaque type
    type_ids = {t['name']: t['id'] for t in types}

    # Regions faites à la mano
    regions_id = 1
    count = 1;
    regions = ['Kanto','Johto','Hoen','Sinnoh']

    # On check si nom diffère pour les familles
    family_id = 1
    prevFam = pokemons[1]['family']

    # Check Legendaire pour tier
    legendaries = [144,145,146,150,151,243,244,245,249,250,251,377,378,379,380,381,382,383,384,385,386,480,481,482,483,484,485,486,487]


    for pokemon in pokemons:
        # Check si famille différente ou non
        if prevFam != pokemon['family']:
            family_id +=1
            pokemon['tier'] = 1
        else:
            pokemon['tier']=2

        if pokemon['id'] in legendaries:
            pokemon['tier']=3
        
        pokemon['family_id'] = family_id
        pokemon['type_id'] = [type_ids[type_name] for type_name in pokemon['types']]
        pokemon['region_id'] = regions_id
        pokemon['region'] = regions[regions_id-1]

        # Check pour chaque régions
        if count == 151:
            regions_id +=1
        if count == 251:
            regions_id +=1
        if count == 386:
            regions_id +=1
        if count == 493:
            regions_id += 1
        count += 1
        prevFam = pokemon['family']
        print(prevFam+" "+ str(family_id) + "\n")

    # On save dans le json
    with open('pokemons_full_details_updated.json', 'w') as file:
        json.dump(pokemons, file, indent=4)
