from fun import DB, readCSV

# file = 'objets'
# file = 'equipements'
file = 'lines'

# entity_id = 1  # Detection radar
entity_id = 4  # Traitement radar
type_id = 1  # event
type_id = 2  # line

csv = readCSV(f'{file}_details_trait')
db = DB('efdm')

for item in csv:
    subobjet = item['subobjet']
    db.table = 'objets'
    insert = {
        'name': item['objet'],
        'entity_id': entity_id,
        'type_id': type_id
    }
    data = db.getData(insert)
    if(not data):
        insert['status'] = 'active'
        db.insert(insert)
    # data = db.getData(insert)

    insert2 = {
        'name': subobjet,
        'objet_id': data['id']
    }

    db.table = 'subobjets'
    data2 = db.getData(insert2)
    if(not data2):
        insert2['status'] = 'active'
        db.insert(insert2)
