import { Component, ElementRef,ViewChild } from '@angular/core';
import { environment } from 'src/environments/environment';
import { HttpClient, HttpHeaders } from '@angular/common/http';

@Component({
  selector: 'app-registration',
  templateUrl: './registration.component.html',
  styleUrls: ['./registration.component.scss']
})
export class RegistrationComponent{
  Name='';
  Email ='';
  Gender = 'Male';
  MobileNumber ='';
  SSCCertificate?:any;
  PUCCertificate?:any;
  CasteCertificate?:any;
  baseUrl = environment.apiUrl;
  menuItem: {section:string, name:string, selected: boolean}[] = [];
  constructor(private http: HttpClient){
    this.menuItem = [{section:'#', name: 'Home', selected:true}

  ]
  }
  highlight(itemName: string){
    this.menuItem.forEach(x=> x.selected = x.name == itemName ? true : false);
  }
  onSSCCertSelected(event:any){
    this.SSCCertificate = event.target.files[0];
  }
  onPUCCertSelected(event:any){
    this.PUCCertificate = event.target.files[0];
  }
  onCasteCertSelected(event:any){
    this.CasteCertificate = event.target.files[0];
  }
  submit(){
    if (this.Name == '') {
      alert("Name is mandatory");
      return;
    }
    if (this.Email == '') {
      alert("Email is mandatory");
      return;
    }
    else if (this.MobileNumber == '') {
      alert("MobileNumber is mandatory");
      return;
    }			  
    else if (this.SSCCertificate == '') {
      alert("SSCCertificate is mandatory");
      return;
    }
    else if (this.PUCCertificate == '') {
      alert("PUCCertificate is mandatory");
      return;
    }
    const url = this.baseUrl + 'Registration';
    
    let fd = new FormData();
    fd.append('Name', this.Name);
    fd.append('Gender', this.Gender);
    fd.append('Email', this.Email);
    fd.append('MobileNumber', this.MobileNumber);
    fd.append('SSCCertificate', this.SSCCertificate);
    fd.append('PUCCertificate', this.PUCCertificate);
    fd.append('CasteCertificate', this.CasteCertificate);
    const headers = new HttpHeaders();    
    this.http.post(url, fd,{ headers, responseType: 'text'}).subscribe(
      (x:string) => {alert(x);
        window.location.reload();
      }
    );
    
  }
}
