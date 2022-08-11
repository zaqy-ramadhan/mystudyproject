package Kasir_lite;
public class dataItem {
    private item x[];
    int id;
    
    public dataItem(int size){
        this.x=new item[size];
    }
    
    public void add(String nama, double harga){
        this.x[id]=new item (this.id,harga,nama);
        this.id++;
    }
    
    public item getItem(int id){
        return this.x[id];
    }
    
    public int getID(){
        return this.id;
    }
    
    public void showItem(){
        System.out.println("=====\tLIST BARANG\t=====");
        for(int j=0; j<this.getID();j++){
            System.out.println("["+j+"]\t: "+this.getItem(j).getNama());
        }
    }
}
