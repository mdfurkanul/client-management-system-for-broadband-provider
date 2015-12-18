
package all_classes;

import java.io.IOException;
import java.net.HttpURLConnection;
import java.net.URL;
import java.net.URLConnection;
import java.net.UnknownHostException;

public class connection_test {
    public static boolean checker()
    {
    try {
        URL url = new URL("http://www.google.com");
        HttpURLConnection urlConnect = (HttpURLConnection)url.openConnection();
        Object objData = urlConnect.getContent();

    } catch (UnknownHostException e) {
        return false;
    }
    catch (IOException e) {
        return false;
    }
    return true;
    }
}
