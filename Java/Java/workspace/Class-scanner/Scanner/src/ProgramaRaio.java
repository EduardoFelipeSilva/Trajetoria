import java.util.Scanner;
public class ProgramaRaio {
    public static void main(String[] args) {
        Scanner ler = new Scanner(System.in);
        double raio, pi,area; 
        
        String circulo;
        System.out.println("Digite o primeiro valor:");
        raio = ler.nextDouble(); 
        
        pi = 3.14;
        area = pi*raio*raio; 
        
        System.out.println("A área de seu circulo é:" +area);
        ler.close(); 
        
    }
    
}