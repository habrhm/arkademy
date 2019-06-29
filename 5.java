import java.util.Arrays;
public class Main
{
	public static void main(String[] args) {
	    System.out.println(urut(435023062));
		
	}

    public static int urut(int angka){
	        String a = Integer.toString(angka);
	        String[] arr = a.split("0");
	        String hasilString = "";
	        for (int i = 0; i < arr.length; i++){
	            char[]chara=arr[i].toCharArray();
            
	            char temp;
	            for (int j = 0; j < chara.length; j++){
	                for (int k = j; k <  chara.length; k++){
	                    if (Integer.parseInt(Character.toString(chara[j])) > Integer.parseInt(Character.toString(chara[k])) ){
	                        temp = chara[j];
	                        chara[j] = chara[k];
	                        chara[k] = temp;
	                    } 
	                } 
	            }
	            for(char cha :chara){
	                hasilString = hasilString + Character.toString(cha);
	            }
	        }
	        
	          
	        
	        int hasilInt = Integer.parseInt(hasilString);
	        
	        
	        return hasilInt;
	    }


}
	   
