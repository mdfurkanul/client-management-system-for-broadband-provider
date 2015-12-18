package all_classes;


import java.util.regex.Matcher;
import java.util.regex.Pattern;
public class mailcheck {
    public static boolean checker(String email)
    {
 String patt ="^[\\w-_\\.+]*[\\w-_\\.]\\@([\\w]+\\.)+[\\w]+[\\w]$";

 Pattern p = Pattern.compile(patt);
 Matcher m = p.matcher(email);
 if(m.find()) 
 return false;
 else
  return true;
 }
}
