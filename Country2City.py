#-*- coding: utf-8 -*-

# Author: 			  	Fatih Mert Doğancan
# Github:				fatihmert
# Release Data:			15.06.2017 - 03:27
# Note:				    When you searching anything please write latin abc (not allow çşıüğö) 

import json

class Country2City(object):
	def __init__(self):
		self.file = open("country2city.json")
		self.arr = json.load(self.file)
		return self

	def isset(self,exp):
		try:
		    exp
		    return 1;
		except IndexError:
		    return 0;

	def getCities(countryName):
		if self.isset(self.arr[str(countryName)]):
			return self.arr[str(countryName)]
		else:
			return 0


	def getCountries():
		return self.arr.keys()

	def findCountryFromCity(cityName):
		for k,v in self.arr:
			for city in v:
				if(str(city) == str(cityName)):
					return k
		return 0

# Example Using

c2c = Country2City()

c2c.getCities("Turkey")
print "Istanbul in ".c2c.findCountryFromCity("Istanbul")
c2c.getCountries()
