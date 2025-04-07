import java.util.Scanner;
public class Exercico3 {

	public static void main(String[] args) {
		
        Scanner in = new Scanner (System.in); 
        
        int num, unidade, dezena, centena, cont1; 
        
        System.out.println("Digite o N° de três algarismos:");
        num = in.nextInt(); 
        
        centena = num / 100; 
        cont1 = num - centena * 100; 
        dezena = cont1 / 10; 
        unidade = num - centena * 100 - dezena * 10; 


        System.out.println("Seu N° invertido é: "+unidade+dezena+centena);
        in.close();
        
        
    }

}
