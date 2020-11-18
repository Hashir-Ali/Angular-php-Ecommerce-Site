export class User {
    public Id: number;
    public firstname: string;
    public middlename: string;
    public lastname: string;
    public password:string;
    public email:string;
    
    constructor(Id:number,firstname: string,middlename: string,lastname: string,password:string,email:string) {
    this.Id = Id;
    this.firstname = firstname;
    this.middlename = middlename;
    this.lastname = lastname;
    this.password = password;
    this.email = email;
    }
    }