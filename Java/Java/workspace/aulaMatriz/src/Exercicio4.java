import java.util.Scanner;
public class Exercicio4 {
		

				
			public static void main (String []args) {
				Scanner in = new Scanner (System.in);
				String [][]a = new String [3] [3];
				int conta=0,cont=0,fim=0,vencedorX=0,vencedorO=0;
				String jogada1="x",jogada2="o"; 

					//Cria matriz

					for(int i=0; i<=2;i++){
						for(int j=0; j<=2; j++){

						}
					}

					//Apresenta matriz

					for(int i=0; i<=2; i++){
						System.out.print("[");
						for(int j=0; j<=2; j++){
							 if (a[i][j] == null) {
						            a[i][j] = " "; 
						           // Define um espa�o em branco caso o valor seja null
						      }
						System.out.print(a[i][j]+ " ");
		
						}
					System.out.println("]");
					}
		
						//For pra acabar o programa e pra jogar

					for(int b=0; b<10; b++){
						for(int i=0; i<=2;i++){
							for(int j=0; j<=2; j++){

								System.out.print("Onde deseja jogar");
								i = in.nextInt();
								j = in.nextInt();
				
								//Saber se pode jogar na posi��o
				
								if (a[i][j]==jogada1 || a[i][j]== jogada2){
									System.out.print("jogada invalida");
								}else{
				
								//Saber qual s�mbolo vai colocar 
				
								conta = cont%2;
				
									if (conta==0){
										a[i][j] = jogada1;
					
									}else { 
										a[i][j] = jogada2;
									}
									cont++;
					
									//Apresenta��o com a jogada
					
										for(i=0; i<=2; i++){
											System.out.print("[");
											for(j=0; j<=2; j++){
												if (a[i][j] == null) {
										            a[i][j] = " ";
										            // Define um espa�o em branco caso o valor seja null
										        }
											System.out.print(a[i][j]+ " ");
						
											}
										System.out.println("]");
										}
						
						
										//Saber se alguem ganhou
						
										if( a[0][0] == jogada1 && a[0][1] == jogada1 && a[0][2] == jogada1 || a[1][0] == jogada1 && a[1][1] == jogada1 && a[1][2] ==jogada1 || a[2][0] == jogada1 && a[2][1] == jogada1 && a[2][2] == jogada1 || a[0][0] == jogada1 && a[1][0] == jogada1 && a[2][0] == jogada1 || a[0][1] == jogada1 && a[1][1] == jogada1 && a[2][1] == jogada1 || a[0][2] == jogada1 && a[1][2] == jogada1 && a[2][2] == jogada1 ){
										vencedorX ++;
						
											}else if( a[0][0] == jogada2 && a[0][1] == jogada2 && a[0][2] == jogada2 || a[1][0] == jogada2 && a[1][1] == jogada2 && a[1][2] ==jogada2 || a[2][0] == jogada2 && a[2][1] == jogada2 && a[2][2] ==jogada2 || a[0][0] == jogada2 && a[1][0] == jogada2 && a[2][0] == jogada2 || a[0][1] == jogada2 && a[1][1] == jogada2 && a[2][1] == jogada2 || a[0][2] == jogada2 && a[1][2] == jogada2 && a[2][2] == jogada2 ){
											vencedorO ++;
						
												}else if(a[0][0] == jogada1 && a[1][1] == jogada1 && a[2][2] == jogada1 || a[2][0] == jogada1 && a[1][1] == jogada1 && a[0][2] ==jogada1) {
												vencedorX ++;
						
													}else if(a[0][0] == jogada2 && a[1][1]== jogada2 && a[2][2]== jogada2 || a[2][0]==jogada2 && a[1][1]==jogada2 && a[0][2]==jogada2) {
													vencedorO++;
										}else{
										}
										if(vencedorX==1){
											System.out.print("Vencedor foi o 1� jogador (X)");
											fim=10;
											}else if(vencedorO==1){
												System.out.print("Vencedor foi 2� jogador(O)"); 
												fim=10;
												}else if(b == 9){
										
													System.out.print("Deu velha");
												}
										fim++;
										b=fim;
									}
								}
							}
						}
					}
				}

