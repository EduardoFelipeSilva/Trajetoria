import java.util.*;
public class Viagem {

				public static void main(String[] args) {
					Scanner ler = new Scanner (System.in);
					double dias, valor;
					int destino;
					
					System.out.print("Digite seu destino: 1 para ILHABELA e 2 para FERNANDO DE NORONHA:");
					destino = ler.nextInt();
					System.out.print("Digite o número de dias desejados:");
					dias = ler.nextDouble();	
					
					if (destino == 1 & dias >= 2 & dias <= 5) {
						valor = dias * 240; 
						System.out.println("O valor a ser pago é:"+valor);
						
					} else if (destino == 1 & dias <= 10){
						valor = dias * 220 + 130;
						System.out.println("O valor a ser pago é:"+valor);
						} else if (destino == 1 & dias >10){
							valor = dias * 210 + 150; 
							System.out.println("O valor a ser pago é:"+valor);
							
							} else if (destino == 2 & dias >=2 & dias <=5) {
								valor = dias * 400 + 100;
								System.out.println("O valor a ser pago é:"+valor);
									} else if (destino == 2 & dias <=10){
										valor = dias * 410 + 150;
										System.out.println("O valor a ser pago é:"+valor);
										}else {
											valor = dias * 420 + 200;
											System.out.println("O valor a ser pago é:"+valor);
					}
					ler.close();
				}
			}
