import { Component } from '@angular/core';

@Component({
  selector: 'app-emiter',
  templateUrl: './emiter.component.html',
  styleUrls: ['./emiter.component.scss'],
})
export class EmiterComponent {
  number = 0;

  OnChangeNumber(): void {
    this.number = Math.floor(Math.random() * 10);
  }
}
