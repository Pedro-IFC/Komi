#-*- coding: utf-8 -*-
#Importano módulos
print("Projeto treino")
import pyttsx3
import time
from numpy.random import randint
#Função de falar
def falar(texto):
    falante.say(texto)
    falante.runAndWait()
#Definir quem fala e suas propiedades 
falante = pyttsx3.init()
falante.setProperty('voice', b'brazil')
falante.setProperty('rate', 250)
voices = falante.getProperty('voices')
falante.setProperty('voice', voices[0].id)
#define o tempo e o ataque
def AtaqueTempo():
    ataque=randint(1,4)
    if(ataque==4):
        tempo=0
        fala='Bola de segunda'
    elif(ataque==2):
        tempo=randint(1,2)
        fala='Meio'
    elif(ataque==1):
        tempo=randint(1,3)
        fala='Saída'
    elif(ataque==3):
        tempo=randint(1,3)
        fala='Ponta'
    return list([ataque, tempo, fala])
while True:
    dados= AtaqueTempo()
    ataque=dados[0]
    tempo=dados[1]
    falai=dados[2]
    if(tempo==0):
        falaF=falai + ' tempo zero'
        tempoF=1
    elif(tempo==1):
        falaF=falai + ' primeiro tempo'
        tempoF=1
    elif(tempo==2):
        falaF=falai + ' segundo tempo'
        tempoF=2
    elif(tempo==3):
        falaF=falai + ' terceiro tempo'
        tempoF=3
    falar(falaF)
    print(falaF)
    time.sleep(tempoF-1)
    print('AGORA')
    falar('AGORA')
    time.sleep(5)
