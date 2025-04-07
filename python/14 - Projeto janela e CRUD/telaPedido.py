import tkinter as tk
from tkinter import messagebox

def JanelaProduto():
    root = tk.Tk()
    root.title("Produtos")
    root.geometry("700x500")

    barraMenu = tk.Menu(root)

    opcao_menu_arquivo = tk.Menu(barraMenu, tearoff=0)
    opcao_menu_arquivo.add_command(label="Sair", command=root.quit)

    barraMenu.add_cascade(label="Arquivo", menu=opcao_menu_arquivo)

    root.config(menu=barraMenu)
    root.mainloop()

