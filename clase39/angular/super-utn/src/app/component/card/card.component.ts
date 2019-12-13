import { Component, OnInit, Input } from '@angular/core';
//recibo con Input el contenido desde app.component.html y lo aplico en @Input

@Component({
  selector: 'app-card',
  templateUrl: './card.component.html',
  styleUrls: ['./card.component.scss']
})
export class CardComponent implements OnInit {

  constructor() { }

  @Input() titulo;
  //titulo = "Japon";
  //img = "assets/img/japon.jpeg";
  @Input() img = "assets/img/japon.jpeg";
  //desc = "Pasaje a japon";
  @Input() desc?: string;

  //precio = 346;
  @Input() precio: number;

  ngOnInit() {
    //var titulo = "colombia";
    //se llama a la variable declarada afuera del init con this.
    console.log(this.titulo);
    console.log("Hola soy el componente card");
  }

}
