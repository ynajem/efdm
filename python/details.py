from fun import readCSV, writeCSV

file = 'objets'
file = 'equipements'
file = 'lines'

csv = readCSV(file)
data = []
for item in csv:
    objets = item['objet'].split(',')
    for objet in objets:
        data.append({
            'objet': objet,
            'subobjet': item['subobjet']
        })
writeCSV(f'{file}_details', data)
