import sys
import json

args = sys.argv[1]
data = json.loads(args)

print(json.dumps(data))
