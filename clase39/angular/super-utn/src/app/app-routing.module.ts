import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';

//importamos la pagina
import { ContactoComponent } from './pages/contacto/contacto.component';
import { ServiciosComponent } from './pages/servicios/servicios.component';
import { NotfoundComponent } from './pages/notfound/notfound.component';
import { HomeComponent } from './pages/home/home.component';


//http://localhost:4200/contacto
//http://localhost:4200/servicios
//http://localhost:4200/cualquiercosa
//http://localhost:4200/
//listado de rutas
const routes: Routes = [
  { path: '', component: HomeComponent },
  { path: 'contacto', component: ContactoComponent},
  {path: 'servicios', component: ServiciosComponent},
  { path: '**', component: NotfoundComponent },
  
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
