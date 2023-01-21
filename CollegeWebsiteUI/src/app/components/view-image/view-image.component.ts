import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-view-image',
  templateUrl: './view-image.component.html',
  styleUrls: ['./view-image.component.scss']
})
export class ViewImageComponent implements OnInit {
  image: string = '';
  ngOnInit(){
    this.image = '/images/'+"0a3ac812-2865-42dd-9600-7df298fb97bf.png";
  }
}
