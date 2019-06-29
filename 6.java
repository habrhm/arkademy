import java.util.Arrays;
public class Main
{
	public static void main(String[] args) {
	    System.out.println(tekaTeki("13231223"));
		
	}

    public static int tekaTeki(String soal){
	    char[] angka = soal.toCharArray();



	    boolean[] arrayLampu; 
	    arrayLampu = new boolean[15];
	    
	    for (int i =0; i < 15; i ++ ){
	        arrayLampu[i] = false;
	        
	    } 
	    
	    
	    for (int i = 0; i < angka.length; i ++){
	        if (angka[i]== '1'){
	            for (int j =0; j < 15; j ++ ){
	                arrayLampu[j] = !arrayLampu[j];
	        
	            }
	        }else if (angka[i] == '2'){
	            for (int j =0; j < 15; j ++ ){
	                if ((j+1) % 2 == 0) 
	                    arrayLampu[j] = !arrayLampu[j];
	        
	            }
	        }else if (angka[i] == '3'){
	            for (int j =0; j < 15; j ++ ){
	                if ((j+1) % 3 == 0)
	                    arrayLampu[j] = !arrayLampu[j];
	        
	            }
	        }
	    }
	    int jumlahNyala = 0;
	    for (boolean lampu :arrayLampu){
	        if (lampu)
	            jumlahNyala++;
	    }
	    
	    
	    
	    return jumlahNyala;
	    
	}




}