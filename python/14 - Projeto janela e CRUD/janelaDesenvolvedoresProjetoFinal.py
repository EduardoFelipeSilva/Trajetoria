import tkinter as tk
from tkinter import messagebox

from telaPedido import JanelaProduto


#-----------------------------------------------------
root = tk.Tk()
root.title("Menus")
# Definir o tamanho da janela
largura = 1200
altura = 1000
root.geometry(f"{largura}x{altura}")

# Obter as dimensões da tela
largura_tela = root.winfo_screenwidth()
altura_tela = root.winfo_screenheight()

# Calcular as coordenadas x e y para posicionar a janela no centro da tela
pos_x = (largura_tela - largura) // 2
pos_y = (altura_tela - altura) // 2


root.geometry(f"+{pos_x}+{pos_y}")

barraMenu = tk.Menu(root)

opcao_menu_arquivo = tk.Menu(barraMenu, tearoff=0)
opcao_menu_arquivo.add_command(label="Sair", command=root.quit)

barraMenu.add_cascade(label="Arquivo", menu=opcao_menu_arquivo)
opcao_menu_exe = tk.Menu(barraMenu, tearoff=0)
opcao_menu_exe.add_command(label="Cliente")
opcao_menu_exe.add_command(label="Produto", command= JanelaProduto)
opcao_menu_exe.add_command(label="Pedido")

barraMenu.add_cascade(label="Cadastro", menu=opcao_menu_exe)

#-------------------------------------------------------

opcao_menu_ajuda = tk.Menu(barraMenu, tearoff=0)
opcao_menu_ajuda.add_command(label="Sobre")
opcao_menu_ajuda.add_command(label="Desenvolvedores")

barraMenu.add_cascade(label="Ajuda", menu=opcao_menu_ajuda)

#-------------------------------------------------------

root.config(menu=barraMenu)
root.mainloop()