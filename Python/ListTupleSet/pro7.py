data = ["Rajkot", "Surat", "Baroda", "Bhuj", "Junagadh", "Jamnanar",
        "Ahamdabad", "Anand", "Amreli", "Morbi"]

print(data)
del data[0]
print(data)
del data[0]
print(data)

data.remove(data[1])
print(data)

data.remove(data[0])
print(data)