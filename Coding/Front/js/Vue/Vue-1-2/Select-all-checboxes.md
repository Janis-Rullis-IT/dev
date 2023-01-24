# Select-all-checboxes

```vue
<input type="checkbox" @change="selectAll()" v-model="allSelect" />
<input type="checkbox" :value="1" v-model="list" >
<input type="checkbox" :value="2" v-model="list" >

  list : [],

  selectAll: function() {
    if (this.allSelect === false) {
      this.list = [];
    } else {
      this.list = [1,2]
    }
  },
```