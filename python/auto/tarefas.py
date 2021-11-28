import pyautogui 
import time 
import pyperclip

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

time.sleep(6)

x=232
y=382
pyautogui.click(x,y)
time.sleep(2)

x=630
y=125
pyautogui.click(x,y)
time.sleep(2)

x=1318
y=546
pyautogui.click(x,y)
time.sleep(2)

pyautogui.hotkey('ctrl', 'a')
pyautogui.hotkey('ctrl', 'c')
pyautogui.click(x,y)
pyautogui.hotkey('ctrl', 'w')

pyautogui.hotkey('win', 'e')
x=103
y=431
pyautogui.click(x,y)

pyautogui.PAUSE=0.2
x=314
y=427
pyautogui.click(x,y)
pyautogui.click(x,y)

x=327
y=361
pyautogui.click(x,y)
pyautogui.click(x,y)

time.sleep(2)

pyautogui.PAUSE=1

pyautogui.hotkey('ctrl', 'a')
pyautogui.hotkey('ctrl', 'v')
pyautogui.click(x,y)
pyautogui.hotkey('ctrl', 'w')
pyautogui.press('enter')
pyautogui.hotkey('ctrl', 'w')

pyautogui.alert("Finalizado com sucesso")
