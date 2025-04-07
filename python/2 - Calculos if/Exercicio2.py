salario=float(input('Digite seu salario'))
if(salario<=400.00):
    reajuste=salario*15/100
    novosalario= reajuste+salario
    print(f'Novo salario: {novosalario:,.2f}')
    print(f'Reajuste ganho: {reajuste:,.2f}')
    print('Em percentual: 15 %')

elif(salario<=800.00):
    reajuste = salario * 12 / 100
    novosalario = reajuste + salario
    print(f'Novo salario: {novosalario:,.2f}')
    print(f'Reajuste ganho: {reajuste:,.2f}')
    print('Em percentual: 12 %')
elif(salario<=1200.00):
    reajuste = salario * 10 / 100
    novosalario = reajuste + salario
    print(f'Novo salario: {novosalario:,.2f}')
    print(f'Reajuste ganho: {reajuste:,.2f}')
    print('Em percentual: 10 %')
elif(salario<=2000.00):
    reajuste = salario * 7 / 100
    novosalario = reajuste + salario
    print(f'Novo salario: {novosalario:,.2f}')
    print(f'Reajuste ganho: {reajuste:,.2f}')
    print('Em percentual: 7 %')
else:
    reajuste = salario * 4 / 100
    novosalario = reajuste + salario
    print(f'Novo salario: {novosalario:,.2f}')
    print(f'Reajuste ganho: {reajuste:,.2f}')
    print('Em percentual: 4 %')