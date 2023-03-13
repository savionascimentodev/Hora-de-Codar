import { Component, Output, EventEmitter } from '@angular/core';

@Component({
  selector: 'app-emiter2',
  templateUrl: './emiter2.component.html',
  styleUrls: ['./emiter2.component.scss'],
})
export class Emiter2Component {
  @Output() changeNumber: EventEmitter<any> = new EventEmitter();

  handleClick(): void {
    this.changeNumber.emit();
  }
}
