import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-contacto',
  templateUrl: './contacto.component.html',
  styleUrls: ['./contacto.component.scss']
})
export class ContactoComponent implements OnInit {

  constructor() { }

  //variable para probar *ngFor
numeros = [45,248,4,87,65];

  //variable para probar *ngIf
  banner = true;

  ngOnInit() {
  }

}
