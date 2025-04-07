import java.util.Scanner; 
public class ProgramaAntecessorSucessor {
    public static void main(String[] args) {
        Scanner ler = new Scanner(System.in); 
        int a, antecessor, sucessor; 
        
        String numero; 
        System.out.println("Digite o seu número:");
        a = ler.nextInt(); 
        antecessor = 1; 
        sucessor = 1; 
        
        antecessor = a-1; 
        sucessor = a+1; 
        
        System.out.println("O antecessor e o sucessor de seu número é:" +antecessor +sucessor);
        ler.close();
    }
}

