import { Component } from '@angular/core';
import { Router } from '@angular/router';

@Component({
  selector: 'app-home',
  templateUrl: './home.component.html',
  styleUrls: ['./home.component.scss']
})
export class HomeComponent {
  menuItem: {section:string, name:string, selected: boolean}[] = [];
  constructor(){
    this.menuItem = [{section:'#', name: 'Home', selected:true},
    {section:'#section_2', name: 'About',selected:false},
    {section:'#section_3', name: 'Academics',selected:false},
    {section:'#section_4', name: 'Facilities',selected:false},
    {section:'#section_5', name: 'Contact',selected:false}

  ]
  }
  highlight(itemName: string){
    this.menuItem.forEach(x=> x.selected = x.name == itemName ? true : false);
  }
}
