data = ["Rajkot", "Surat", "Baroda", "Bhuj", "Junagadh", "Jamnanar",
        "Ahamdabad", "Anand", "Amreli", "Morbi"]

print(len(data))
data1 = data.copy()
data.clear()
print(len(data))

print(data1)
print(data1.count("Rajkot"))
print(data1.count("Rajula"))
print(data1.index("Rajkot"))
