#Basado en el código de Integrating OpenALPR en https://github.com/openalpr/openalpr/wiki/Integrating-OpenALPR

#importa las libreria 
from openalpr import Alpr
import os
import picamera
import PIL
from PIL import Image
from Naked.toolshed.shell import execute_js

camera = picamera.PiCamera()



#inicializa la libreria con el codigo de la placa
alpr = Alpr("us", "Path para openalpr.config ", " Path para openalpr/runtime_data") #Error!


#Se asegura de que la libreria haya cargado
if not alpr.is_loaded():
    print("Error loading OpenALPR")
    sys.exit(1)


#Define máximo de posibles opciones retornadas.
alpr.set_top_n(3)

alpr.set_default_region("md")

for a in range(5) #while True:

	#tomar una foto
	camera.capture("Desktop/placa.jpg")

	#Reconoce el archivo de imagen
	results = alpr.recognize_file("Desktop/placa.jpg")

	i = 0
	#recorre las placas identificadas
	for plate in results['results']:
	    i += 1

	    #llama al script de request
	    execute_js('request.js')
	    print("Plate #%d" % i)
	    print("   %12s %12s" % ("Plate", "Confidence"))

	    #devuelve las opciones encontradas
	    for candidate in plate['candidates']:
	        prefix = "-"
	        if candidate['matches_template']:
	            prefix = "*"

	        print("  %s %12s%12f" % (prefix, candidate['plate'], candidate['confidence']))

	#delay 5 segundos
	sleep(5)
	#elimina la foto
	os.remove(foto)
	#descarga la memoria (algo asi?)
	alpr.unload()
