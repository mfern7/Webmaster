import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-home',
  templateUrl: './home.component.html',
  styleUrls: ['./home.component.scss']
})
export class HomeComponent implements OnInit {

  constructor() { }

saludar () {
  alert("Hola gracias por hacer click");
}

mostrar = false;

toggleCoso() {
  this.mostrar = !this.mostrar;
}



  ngOnInit() {
  }

}
