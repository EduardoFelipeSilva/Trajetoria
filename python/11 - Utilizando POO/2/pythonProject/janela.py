import tkinter as tk
from tkinter import messagebox




def exibirDados():
    num1 = float(intnum1.get())
    num2 = float(intnum2.get())
    num3 = float(intnum3.get())
    num4 = float(intnum4.get())
    resul = (num1+ num2 + num3+ num4)/4
    messagebox.showinfo("Dados preenchidos", f"Média: {resul}")

# Janela

janela = tk.Tk()
janela.title("media")
#janela.geometry("800x600")

# Definir o tamanho da janela
largura = 800
altura = 600
janela.geometry(f"{largura}x{altura}")


# Obter as dimensões da tela
largura_tela = janela.winfo_screenwidth()
altura_tela = janela.winfo_screenheight()

# Calcular as coordenadas x e y para posicionar a janela no centro da tela
pos_x = (largura_tela - largura) // 2
pos_y = (altura_tela - altura) // 2

# Posicionar a janela no centro da tela
janela.geometry(f"+{pos_x}+{pos_y}")

# Objetos da Janela
lbnum1 = tk.Label(janela, text="Numero 1 :")
lbnum1.grid(row=0, column=0, padx=10, pady=5, sticky=tk.W)

intnum1 = tk.Entry(janela)
intnum1.grid(row=0, column=1, padx=10, pady=5)

lbnum2 = tk.Label(janela, text="Numero 2 :")
lbnum2.grid(row=1, column=0, padx=10, pady=5, sticky=tk.W)

intnum2 = tk.Entry(janela)
intnum2.grid(row=1, column=1, padx=10, pady=5)

lbnum3 = tk.Label(janela, text="Numero 3 :")
lbnum3.grid(row=2, column=0, padx=10, pady=5, sticky=tk.W)

intnum3 = tk.Entry(janela)
intnum3.grid(row=2, column=1, padx=10, pady=5)

lbnum4 = tk.Label(janela, text="Numero 4:")
lbnum4.grid(row=3, column=0, padx=10, pady=5, sticky=tk.W)

intnum4 = (tk.Entry(janela))
intnum4.grid(row=3, column=1, padx=10, pady=5)



btEnviar = tk.Button(janela, text="Enviar", command=exibirDados)
btEnviar.grid(row=4, columnspan=2, padx=10, pady=10)

# execução da janela
janela.mainloop()

