/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package interface_output;

public class ImageView extends javax.swing.JDialog {
    int mX,mY;
    public ImageView(java.awt.Frame parent, boolean modal,String url) {
        super(parent, modal);
        initComponents();
        img.setIcon(new javax.swing.ImageIcon(url));
                
    }
    @SuppressWarnings("unchecked")
    // <editor-fold defaultstate="collapsed" desc="Generated Code">//GEN-BEGIN:initComponents
    private void initComponents() {

        img = new javax.swing.JLabel();
        ic = new javax.swing.JLabel();

        setUndecorated(true);
        addWindowListener(new java.awt.event.WindowAdapter() {
            public void windowClosing(java.awt.event.WindowEvent evt) {
                closeDialog(evt);
            }
        });
        getContentPane().setLayout(new org.netbeans.lib.awtextra.AbsoluteLayout());

        img.setFont(new java.awt.Font("Tahoma", 1, 12)); // NOI18N
        img.setForeground(new java.awt.Color(0, 102, 51));
        img.setIcon(new javax.swing.ImageIcon(getClass().getResource("/img/imageView.png"))); // NOI18N
        img.setToolTipText("Click anywhere to close window!");
        img.addMouseMotionListener(new java.awt.event.MouseMotionAdapter() {
            public void mouseDragged(java.awt.event.MouseEvent evt) {
                imgMouseDragged(evt);
            }
        });
        img.addMouseListener(new java.awt.event.MouseAdapter() {
            public void mouseClicked(java.awt.event.MouseEvent evt) {
                imgMouseClicked(evt);
            }
            public void mousePressed(java.awt.event.MouseEvent evt) {
                imgMousePressed(evt);
            }
        });
        getContentPane().add(img, new org.netbeans.lib.awtextra.AbsoluteConstraints(0, 0, 380, 280));

        ic.setIcon(new javax.swing.ImageIcon(getClass().getResource("/img/imageView.png"))); // NOI18N
        getContentPane().add(ic, new org.netbeans.lib.awtextra.AbsoluteConstraints(0, 0, 380, 280));

        pack();
        setLocationRelativeTo(null);
    }// </editor-fold>//GEN-END:initComponents

    private void closeDialog(java.awt.event.WindowEvent evt) {//GEN-FIRST:event_closeDialog

    }//GEN-LAST:event_closeDialog

    private void imgMouseDragged(java.awt.event.MouseEvent evt) {//GEN-FIRST:event_imgMouseDragged
        // TODO add your handling code here:
        int x=evt.getXOnScreen();
        int y=evt.getYOnScreen();
        this.setLocation(x-mX, y-mY);
    }//GEN-LAST:event_imgMouseDragged

    private void imgMousePressed(java.awt.event.MouseEvent evt) {//GEN-FIRST:event_imgMousePressed
        // TODO add your handling code here:
        mX=evt.getX();
        mY=evt.getY();
    }//GEN-LAST:event_imgMousePressed

    private void imgMouseClicked(java.awt.event.MouseEvent evt) {//GEN-FIRST:event_imgMouseClicked
    this.dispose();
    }//GEN-LAST:event_imgMouseClicked
    

    /**
     * @param args the command line arguments
     */
//    public static void main(String args[]) {
//        /* Set the Nimbus look and feel */
//        //<editor-fold defaultstate="collapsed" desc=" Look and feel setting code (optional) ">
//        /* If Nimbus (introduced in Java SE 6) is not available, stay with the default look and feel.
//         * For details see http://download.oracle.com/javase/tutorial/uiswing/lookandfeel/plaf.html 
//         */
//        try {
//            for (javax.swing.UIManager.LookAndFeelInfo info : javax.swing.UIManager.getInstalledLookAndFeels()) {
//                if ("Nimbus".equals(info.getName())) {
//                    javax.swing.UIManager.setLookAndFeel(info.getClassName());
//                    break;
//                }
//            }
//        } catch (ClassNotFoundException ex) {
//            java.util.logging.Logger.getLogger(DetailsBills.class.getName()).log(java.util.logging.Level.SEVERE, null, ex);
//        } catch (InstantiationException ex) {
//            java.util.logging.Logger.getLogger(DetailsBills.class.getName()).log(java.util.logging.Level.SEVERE, null, ex);
//        } catch (IllegalAccessException ex) {
//            java.util.logging.Logger.getLogger(DetailsBills.class.getName()).log(java.util.logging.Level.SEVERE, null, ex);
//        } catch (javax.swing.UnsupportedLookAndFeelException ex) {
//            java.util.logging.Logger.getLogger(DetailsBills.class.getName()).log(java.util.logging.Level.SEVERE, null, ex);
//        }
//        //</editor-fold>
//
//        /* Create and display the dialog */
//        java.awt.EventQueue.invokeLater(new Runnable() {
//            public void run() {
//                DetailsBills dialog = new DetailsBills(new javax.swing.JFrame(), true);
//                dialog.addWindowListener(new java.awt.event.WindowAdapter() {
//                    @Override
//                    public void windowClosing(java.awt.event.WindowEvent e) {
//                        System.exit(0);
//                    }
//                });
//                dialog.setVisible(true);
//            }
//        });
//    }

    // Variables declaration - do not modify//GEN-BEGIN:variables
    private javax.swing.JLabel ic;
    private javax.swing.JLabel img;
    // End of variables declaration//GEN-END:variables

}
