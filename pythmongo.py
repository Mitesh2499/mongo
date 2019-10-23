from pymongo import *
client = MongoClient()
# print(client)
db = client.pythondb
col = db.stud
'''
record = [{"roll": 3, "name": "Cap"}, {"roll": 4, "name": "Spidy"}]
col.insert_many(record)
print("record inserted")
'''
'''
col.update({"roll":3},{"$set":{"roll":1}})
print("record update")
'''

col.delete_many({"roll": 1})
records = col.find()
for r in records:
    print(r)
