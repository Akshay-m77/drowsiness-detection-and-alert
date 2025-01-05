# -*- coding: utf-8 -*-

import tkinter as tk
from tkinter import Message ,Text
from tkinter import *
import tkinter.messagebox
import PIL
from PIL import ImageTk
from PIL import Image
import os
import subprocess
import webbrowser

window = tk.Tk()
window.title("")

dialog_title = 'QUIT'
dialog_text = 'Are you sure?'
 
#window.geometry('1280x720')
#window.configure(background='#3b5999')

bg= ImageTk.PhotoImage(file="./bg.jpg")
#Create a canvas
canvas= Canvas(window,width= 400, height= 200)
canvas.pack(expand=True, fill= BOTH)
#Add the image in the canvas
canvas.create_image(0,0,image=bg, anchor="nw")

window.wm_attributes("-transparentcolor", 'grey')

window.attributes('-fullscreen', True)

window.grid_rowconfigure(0, weight=1)
window.grid_columnconfigure(0, weight=1)

        
def driver(): 
	os.system("python drowsiness_detection.py --shape_predictor shape_predictor_68_face_landmarks.dat")
	exit()
        
anmdettrk = tk.Button(window, text="Camera On", command=driver  ,fg="white"  ,bg="#388E3C"  ,width=20  ,height=2, activebackground = "#21759b" ,font=('times', 15, ' bold '))
anmdettrk.place(x=1100, y=280)

quitWindow = tk.Button(window, text="Quit", command=window.destroy  ,fg="white"  ,bg="#388E3C"  ,width=20  ,height=2, activebackground = "#21759b" ,font=('times', 15, ' bold '))
quitWindow.place(x=1100, y=670)

 
window.mainloop()
