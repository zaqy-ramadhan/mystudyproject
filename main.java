package Kasir_lite;
import java.util.Scanner;
public class main {
    public static void main(String[] args){
        Scanner input = new Scanner(System.in);
        int stat[] = new int [1];
        stat[0]=0;
        double totalBelanja=0;
        int listID[]=new int [100];
        int a,jumlah,bayar,c=0;
        System.out.println("=====\tKASIR-KASIRAN\t=====");
        dataItem x = new dataItem (100);
        x.add("INDOMILK_COKLAT",3500.0);
        x.add("INDOMILK_STRAWBERRY",3500.0);
        x.add("INDOMILK_MELON",3500.0);
        x.add("INDOMIE_GORENG",2500.0);
        x.add("INDOMIE_SOTO",2700.0);
        x.add("AQUA_BOTOL",2500.0);
        x.add("AQUA_KARDUS",25000.0);
        x.add("TELUR(KG)",23500.0);
        x.add("BERAS(KG)", 10000.0);
        x.add("KOPI_KAPAL_API", 1500.0);
        x.add("GULA(KG)", 15000.0);
        x.add("MINYAK(L)", 14000.0);
        x.add("TERIGU(KG)",8500.0);
        x.add("KANJI(KG)",12000.0);
        x.add("GG_SURYA_12",19500.0);
        x.add("SABUN_LIFEBUOIY",2500.0);
        x.add("PEPSODENT",7000.0);
        x.add("HEAD&SHOULDER",20000.0);

        x.showItem();
        
        System.out.println("\nMASUKKAN ID BARANG DAN JUMLAH YANG DIBELI :");
        while(stat[0]==0){
            System.out.print("ID\t:");
            a = input.nextInt();
            System.out.print("JUMLAH\t:");
            jumlah = input.nextInt();
            x.getItem(a);
            x.getItem(a).setJumlah(jumlah);
            listID[c]=x.getItem(a).getId();
            c++;
            System.out.print("done? 0(no)/1(yes)");
            stat[0] = input.nextInt();
        }
        System.out.println("\n====== BARANG YANG DIBELI ======");
        for(int i=0; i<c; i++){
            System.out.println(x.getItem(listID[i]).getNama());
            System.out.println(x.getItem(listID[i]).getHarga()+" X "+x.getItem(listID[i]).getJumlah()+"\t\t"+(x.getItem(listID[i]).getHarga())*(double)(x.getItem(listID[i]).getJumlah()));
            totalBelanja=totalBelanja+(x.getItem(listID[i]).getHarga())*(double)(x.getItem(listID[i]).getJumlah());
        }
        System.out.println("===================");
        System.out.println("SUBTOTAL\t:\t"+totalBelanja);
        System.out.println("===================");
        System.out.print("DISCOUNT VOUCHER:\n0(no)/1(yes)");
        stat[0] = input.nextInt();
        if(stat[0]==1){
            System.out.println("JUMLAH DISKON(%):");
            int disc = input.nextInt();
            totalBelanja=(totalBelanja-(totalBelanja*disc/100));
            System.out.println("SUBTOTAL\t:\t"+totalBelanja);
        }
        System.out.println("===================");
        System.out.print("BAYAR\t\t:\t");
        bayar = input.nextInt();
        System.out.println("===================");
        System.out.println("KEMBALI\t\t:\t"+((double)bayar-totalBelanja));
    }
}
