import pyautogui 
import time 
import pyperclip

contatos=['Aline','Bruna','Carol']
msg='Bom dia'
pyautogui.PAUSE=1

pyautogui.alert("Vai começar, aperte OK e não mexa em nada")

pyautogui.hotkey('win')
pyautogui.write("Opera")
pyautogui.press('enter')
time.sleep(4)

url="https://web.whatsapp.com"
pyperclip.copy(url)
pyautogui.hotkey('ctrl', 't')
pyautogui.hotkey('ctrl', 'v')
pyautogui.press('enter')

time.sleep(10)

for x in contatos: 
    pyperclip.copy(x)
    x=242
    y=187
    pyautogui.click(x,y)
    time.sleep(1)
    pyautogui.hotkey('ctrl', 'v')
    pyautogui.press('enter')
    pyperclip.copy(msg)
    pyautogui.hotkey('ctrl', 'v')
    pyautogui.press('enter')
    
pyautogui.alert("Processo finalizado com sucesso")
