from importlib import reload

import Calculator as cal

print(dir(cal))
reload(cal) #
print(dir(cal))