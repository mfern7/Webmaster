import { Component, OnInit } from '@angular/core';

//importo el contenido del array mascotas
import mascotas from '../../../assets/data/mascotas';

@Component({
  selector: 'app-servicios',
  templateUrl: './servicios.component.html',
  styleUrls: ['./servicios.component.scss']
})
export class ServiciosComponent implements OnInit {

  constructor() { }

  datamascotas = mascotas;

  ngOnInit() {
    //this sirve para indicarle que la variable esta declarada fuera del init
    console.log(this.datamascotas);
  }

}
