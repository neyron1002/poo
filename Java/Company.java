public class Company {
    Integer id;
    String bussinessName;
    Integer nit;

    public void printData(){
        System.out.println("Nombre Empresa: " + this.bussinessName);
        System.out.println("NIT " + this.nit);
    }
}
