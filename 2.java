import java.util.Arrays;
public class Main
{
	public static void main(String[] args) {
		System.out.println(cekEmail("mail@mail.com"));
		System.out.println(cekPhone("+6282215374"));
		System.out.println(cekUser("arkademy"));
		System.out.println(cekPass("#.aA262jkd"));
	}

public static boolean cekEmail(String email){
	    String[] splitAt = email.split("@");
	    String[] splitDot = splitAt[1].split("\\.");
	    
	    
	    if (splitAt.length == 2){
	        if (splitAt[0].length() >= 1){
	            if (splitDot.length == 2){
	               if (splitDot[0].length() >= 1){
	                    if (splitDot[1].length() >= 2)
	                        return true;
	                    else
	                        return false;
	                }else
	                    return false;
	            }else
	                return false;
	       }else
	            return false;
	    }else
	        return false;
	    
	}
	
	public static boolean cekPhone(String phone){
	    String region = phone.substring(0, 3);
	    boolean isAngka = true;
	    if (phone.length()>=8 && phone.length()<=15){
	        if (region.equals("+62")){
	            for (int i = 1; i< phone.length(); i++){
	                if(!Character.isDigit(phone.charAt(i)))
                        isAngka = false;
	            }
	            if (isAngka){
	                return true;
	            }else 
	                return false; 
	        }else
	            return false;
	    }else
	        return false;
	   
	}
	
	public static boolean cekUser(String user){
	    boolean isKecil = true;
	    if (user.length()>=5 && user.length()<=9){
	        
	       for (int i = 0; i< user.length(); i++){
	           if(!Character.isLowerCase(user.charAt(i)))
                        isKecil = false;
	       }
	       if (isKecil){
	           return true;
	       }else 
	           return false;
	    }else
	        return false;
	   
	}
	
	public static boolean cekPass(String pass){
	    if (pass.length()>=8 ){
	        boolean adaPagar = false;
	        boolean adaSimbol = false;
	        boolean adaAngka = false;
	        boolean adaKecil = false;
	        boolean adaBesar = false;
	        for (int i = 0; i < pass.length(); i++){
	            if(pass.charAt(i) == '#')
                    adaPagar = true;
                else if(Character.isLowerCase(pass.charAt(i)))
                    adaKecil = true;
	            else if(Character.isUpperCase(pass.charAt(i)))
	                adaBesar = true;
	            else if(Character.isDigit(pass.charAt(i)))
	                adaAngka = true;
	            else if(!Character.isWhitespace(pass.charAt(i)))
	                adaSimbol = true;
	        }	        
	        if (adaPagar && adaAngka && adaBesar && adaKecil && adaSimbol){
	            return true;
	        }else
	           return false; 
	    }else
	        return false;   
	    
	    
	}
}
	   
