package lacodeRepeticao;

import java.util.*;
public class NumeroInteiro {

					public static void main(String[] args) {
						Scanner ler = new Scanner (System.in);
						int r = 0,i = 1;
						
						while(i<= 100) {
						r = i + r;  
						i ++;
					}
					System.out.println("A soma dos numeros inteiros é:"+r);
					}
}
				
