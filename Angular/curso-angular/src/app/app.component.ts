import { Component } from '@angular/core';

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.scss'],
})
export class AppComponent {
  userName: string = 'Saviola';

  userData = {
    email: 'savio@gmail.com',
    role: 'Admin',
  };

  title = 'curso-angular';
}
