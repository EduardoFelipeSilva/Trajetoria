class torneio:
    # QUARTAS

    def quartas(self):
        self.timeA = int(input('Digite o placar do 1° jogo comecando pelo time A'))
        self.timeB = int(input('Digite o placar do 1° jogo do  time B'))
        if (self.timeA >self.timeB):
           self.timeA = -1
        else:
            self.timeB = -1


        self.timeC = int(input('Digite o placar do 2° jogo comecando pelo time C'))
        self.timeD = int(input('Digite o placar do 1° jogo do  time D'))
        if (self.timeC > self.timeD):
            self.timeC = -1
        else:
            self.timeD = -1

        self.timeE = int(input('Digite o placar do 3° jogo comecando pelo time E'))
        self.timeF = int(input('Digite o placar do 1° jogo do  time F'))
        if (self.timeE > self.timeF):
            self.timeE = -1
        else:
            self.timeF = -1

        self.timeG = int(input('Digite o placar do 4° jogo comecando pelo time G'))
        self.timeH = int(input('Digite o placar do 1° jogo do  time H'))
        if (self.timeG > self.timeH):
            self.timeG = -1
        else:
            self.timeH = -1

    # SEMIFINAL

        if (self.timeA == -1 & self.timeC == -1):
            self.timeA = int(input('Digite o placar do 1° jogo das semifinais comecando pelo time A'))
            self.timeC = int(input('Digite o placar do 1° jogo das semifinais do time C'))
            if (self.timeA > self.timeC):
                self.timeA = -2
            else:
                self.timeC = -2

        elif (self.timeA == -1 & self.timeD ==-1):
            self.timeA = int(input('Digite o placar do 1° jogo das semifinais comecando pelo time A'))
            self.timeD = int(input('Digite o placar do 1° jogo das semifinais do time D'))
            if (self.timeA > self.TimeD):
                self.timeA = -2
            else:
                self.timeD = -2

        if (self.timeB == -1 & self.timeC == -1):
            self.timeB = int(input('Digite o placar do 1° jogo das semifinais comecando pelo time B'))
            self.timeC = int(input('Digite o placar do 1° jogo das semifinais do time C'))
            if (self.timeB > self.timeC):
                self.timeB = -2
            else:
                self.timeC = -2

        elif (self.timeB == -1 & self.timeD ==-1):
            self.timeB = int(input('Digite o placar do 1° jogo das semifinais comecando pelo time B'))
            self.timeD = int(input('Digite o placar do 1° jogo das semifinais do time D'))
            if (self.timeB > self.timeD):
                self.timeB = -2
            else:
                self.timeD = -2

        if (self.timeE == -1 & self.timeG == -1):
            self.timeE = int(input('Digite o placar do 1° jogo das semifinais comecando pelo time E'))
            self.timeG = int(input('Digite o placar do 1° jogo das semifinais do time G'))
            if (self.timeE > self.timeG):
                self.timeE = -2
            else:
                self.timeG = -2

        elif (self.timeE == -1 & self.timeH ==-1):
            self.timeE = int(input('Digite o placar do 1° jogo das semifinais comecando pelo time E'))
            self.timeH = int(input('Digite o placar do 1° jogo das semifinais do time H'))
            if (self.timeE > self.timeH):
                self.timeE = -2
            else:
                self.timeH = -2

        if (self.timeF == -1 & self.timeG == -1):
            self.timeF = int(input('Digite o placar do 1° jogo das semifinais comecando pelo time F'))
            self.timeG = int(input('Digite o placar do 1° jogo das semifinais do time G'))
            if (self.timeF > self.timeG):
                self.timeF = -2
            else:
                self.timeG = -2

        elif (self.timeF == -1 & self.timeH ==-1):
            self.timeF = int(input('Digite o placar do 1° jogo das semifinais comecando pelo time F'))
            self.timeH = int(input('Digite o placar do 1° jogo das semifinais do time H'))
            if (self.timeF > self.timeH):
                self.timeF = -2
            else:
                self.timeH = -2



        # Se time A tiver ganho as Semifinal

        if (self.timeA == -2 & self.timeE == -2):
            self.timeA = int(input('Digite o placar da final do time A'))
            self.timeE = int(input('Digite o placar da final do time E'))
            if (self.timeA > self.timeE):
                print('timeA')
            else:
                print('timeE')

        elif (self.timeA == -2 & self.timeF == -2):
            self.timeA = int(input('Digite o placar da final do time A'))
            self.timeF = int(input('Digite o placar da final do time F'))
            if (self.timeA > self.timeF):
                print('timeA')
            else:
                print('timeF')

        elif (self.timeA == -2 & self.timeG == -2):
            self.timeA = int(input('Digite o placar da final do time A'))
            self.timeG = int(input('Digite o placar da final do time G'))
            if (self.timeA > self.timeG):
                print('timeA')
            else:
                print('timeG')

        elif (self.timeA == -2 & self.timeH == -2):
            self.timeA = int(input('Digite o placar da final do time A'))
            self.timeH = int(input('Digite o placar da final do time H'))
            if (self.timeA > self.timeH):
                print('timeA')
            else:
                print('timeH')

        # Se time B tiver ganho as Semifinais

        if (self.timeB == -2 & self.timeE == -2):
            self.timeB = int(input('Digite o placar da final do time B'))
            self.timeE = int(input('Digite o placar da final do time E'))
            if (self.timeB > self.timeE):
                print('timeB')
            else:
                print('timeE')

        elif (self.timeB == -2 & self.timeF == -2):
            self.timeB = int(input('Digite o placar da final do time B'))
            self.timeF = int(input('Digite o placar da final do time F'))
            if (self.timeB > self.timeF):
                print('timeB')
            else:
                print('timeF')

        elif (self.timeB == -2 & self.timeG == -2):
            self.timeB = int(input('Digite o placar da final do time B'))
            self.timeG = int(input('Digite o placar da final do time G'))
            if (self.timeB > self.timeG):
                print('timeB')
            else:
                print('timeG')

        elif (self.timeB == -2 & self.timeH == -2):
            self.timeB = int(input('Digite o placar da final do time B'))
            self.timeH = int(input('Digite o placar da final do time H'))
            if (self.timeB > self.timeH):
                print('timeB')
            else:
                print('timeH')

        # Se time C tiver ganho as Semifinais

        if (self.timeC == -2 & self.timeE == -2):
            self.timeC = int(input('Digite o placar da final do time C'))
            self.timeE = int(input('Digite o placar da final do time E'))
            if (self.timeC > self.timeE):
                print('timeC')
            else:
                print('timeE')

        elif (self.timeC == -2 & self.timeF == -2):
            self.timeC = int(input('Digite o placar da final do time C'))
            self.timeF = int(input('Digite o placar da final do time F'))
            if (self.timeC > self.timeF):
                print('timeC')
            else:
                print('timeF')

        elif (self.timeC == -2 & self.timeG == -2):
            self.timeC = int(input('Digite o placar da final do time C'))
            self.timeG = int(input('Digite o placar da final do time G'))
            if (self.timeC > self.timeG):
                print('timeC')
            else:
                print('timeG')

        elif (self.timeC == -2 & self.timeH == -2):
            self.timeC = int(input('Digite o placar da final do time C'))
            self.timeH = int(input('Digite o placar da final do time H'))
            if (self.timeC > self.timeH):
                print('timeC')
            else:
                print('timeH')

        # Se time D tiver ganho as Semifinais

        if (self.timeD == -2 & self.timeE == -2):
            self.timeD = int(input('Digite o placar da final do time D'))
            self.timeE = int(input('Digite o placar da final do time E'))
            if (self.timeD > self.timeE):
                print('timeD')
            else:
                print('timeE')

        elif (self.timeD == -2 & self.timeF == -2):
            self.timeD = int(input('Digite o placar da final do time D'))
            self.timeF = int(input('Digite o placar da final do time F'))
            if (self.timeD > self.timeF):
                print('timeD')
            else:
                print('timeF')

        elif (self.timeD == -2 & self.timeG == -2):
            self.timeD = int(input('Digite o placar da final do time D'))
            self.timeG = int(input('Digite o placar da final do time G'))
            if (self.timeD > self.timeG):
                print('timeD')
            else:
                print('timeG')

        elif (self.timeD == -2 & self.timeH == -2):
            self.timeD = int(input('Digite o placar da final do time D'))
            self.timeH = int(input('Digite o placar da final do time H'))
            if (self.timeD > self.timeH):
                print('timeD')
            else:
                print('timeH')

        # Se time E tiver ganho as Semifianis

        if (self.timeE == -2 & self.timeF == -2):
            self.timeE = int(input('Digite o placar da final do time E'))
            self.timeF = int(input('Digite o placar da final do time F'))
            if (self.timeE > self.timeF):
                print('timeE')
            else:
                print('timeF')


        elif (self.timeE == -2 & self.timeG == -2):
            self.timeE = int(input('Digite o placar da final do time E'))
            self.timeG = int(input('Digite o placar da final do time G'))
            if (self.timeE > self.timeG):
                print('timeE')
            else:
                print('timeG')

        elif (self.timeE == -2 & self.timeH == -2):
            self.timeE = int(input('Digite o placar da final do time E'))
            self.timeH = int(input('Digite o placar da final do time H'))
            if (self.timeE > self.timeH):
                print('timeE')
            else:
                print('timeH')

        # Se time F tiver ganho as Semifinais

        if (self.timeF == -2 & self.timeG == -2):
            self.timeF = int(input('Digite o placar da final do time F'))
            self.timeG = int(input('Digite o placar da final do time G'))
            if (self.timeF > self.timeG):
                print('timeF')
            else:
                print('timeG')

        elif (self.timeF == -2 & self.timeH == -2):
            self.timeF = int(input('Digite o placar da final do time F'))
            self.timeH = int(input('Digite o placar da final do time H'))
            if (self.timeF > self.timeH):
                print(self.timeF)
            else:
                print('timeH')

        # Se time G tiver ganho as Semifinais

        if (self.timeG == -2 & self.timeH == -2):
            self.timeG = int(input('Digite o placar da final do time G'))
            self.timeH = int(input('Digite o placar da final do time H'))
            if (self.timeG > self.timeH):
                print('timeG')
            else:
                print('timeH')