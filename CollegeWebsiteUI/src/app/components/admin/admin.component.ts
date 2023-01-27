import { Component } from '@angular/core';
import { environment } from 'src/environments/environment';
import { HttpClient } from '@angular/common/http';


@Component({
  selector: 'app-admin',
  templateUrl: './admin.component.html',
  styleUrls: ['./admin.component.scss']
})
export class AdminComponent {
  menuItem: {section:string, name:string, selected: boolean}[] = [];
  showTable = false;
  id:string='';
  pwd:string = '';
  query:string = '';
  baseUrl = environment.apiUrl;
  students:any;
  constructor(private http: HttpClient){
    this.menuItem = [{section:'#', name: 'Home', selected:true}

  ]
  }
  highlight(itemName: string){
    this.menuItem.forEach(x=> x.selected = x.name == itemName ? true : false);
  }
  view(){
    console.log(environment.production);
    this.id = 'kcnadmin';
    this.pwd = 'kcnadminblr0!';
    const url = this.baseUrl + 'Registration?Username='+this.id +'&Password='+this.pwd+ '&SearchQuery='+this.query;
    this.http.get(url).subscribe(data=>{
      this.students = data;
      if(this.students.length > 0){
        this.showTable = true;
      } else {
        this.showTable = false;
      }
      
    });
  }
}
