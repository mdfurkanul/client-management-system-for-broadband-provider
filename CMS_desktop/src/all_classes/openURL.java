
package all_classes;

import java.awt.Desktop;
import java.io.IOException;
import java.net.URI;
import java.net.URISyntaxException;


public class openURL {
    public static void go() throws URISyntaxException
    {
        final URI uri1 = new URI("https://accounts.google.com");
        final URI uri2= new URI("http://www.mail.yahoo.com");
        final URI uri3= new URI("http://www.outlook.com");
        final URI mail= new URI("mailto:mfi7391@gmai1.com?subject=Help%20me&body=Hi%20Dear,%20%20");
        open(mail);
    }
     public static void go_set(String url) throws URISyntaxException
    {
        final URI uri1 = new URI(url);
        open(uri1);
    }
    private static void open(URI uri) {
    if (Desktop.isDesktopSupported()) {
      try {
        Desktop.getDesktop().browse(uri);
      } catch (IOException e) {
          
      }
    }
    }
}
