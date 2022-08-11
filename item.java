package Kasir_lite;
public class item {
    private int id_item;
    private double harga_item;
    private String nama_item;
    private int jumlah;
    public item(int id, double harga, String nama){
        this.id_item=id;
        this.harga_item=harga;
        this.nama_item=nama;
    }
    
    public String getNama(){
        return this.nama_item;
    }
    
    public double getHarga(){
        return this.harga_item;
    }
    
    public int getId(){
        return this.id_item;
    }
    
    public void setJumlah(int x){
        this.jumlah=x;
    }
    
    public int getJumlah(){
        return this.jumlah;
    }
}
