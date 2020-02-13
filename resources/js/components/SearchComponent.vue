<template>
<div class="container " align="center" >
 
       
      <ais-instant-search
      :search-client="searchClient"
      index-name="listings"
      >
      <div class="container"> 
      <ais-search-box placeholder="Search here…"  />
      </div>
      <ais-hits>
         <table slot-scope="{ items }" class="table table-striped table-inverse table-responsive" width="90%">
        <thead class="thead-inverse">
          <tr>
            <th>Name</th>
            <th>Gender</th>
            <th>Phone</th>
            <th>Address</th>
            <th>Email</th>
            <th>Nationality</th>
            <th>Date of Birth</th>
            <th>Education background</th>
            <th>Preferred mode of contact</th>
          </tr>
          </thead>
        
          <tbody >
            <tr v-for="item in items" :key="item.objectID">
              <td>{{(item.name)}}</td>
              <td v-if="item.gender==='1'"> {{"Male"}}</td>
              <td v-else-if="item.gender==='2'">{{"Female"}}</td>    
              <td v-else>{{"Others"}}</td>       
              <td>{{item.phone}}</td>
              <td>{{(item.address)}}</td>
              <td>{{item.email}}</td>
              <td>{{(item.nationality)}}</td>
              <td>{{ item.dob }}</td>
              <td>{{(item.education_background)}}</td>
              <td v-if="item.preferred_mode==='1'">  {{"Phone"}}  </td>
              <td v-else-if="item.preferred_mode==='2'">{{"Email"}}</td>    
              <td v-else>{{"None"}}</td>                
            </tr>
          </tbody>  
      </table>
      </ais-hits> 
  
  <div class="text-center"> <ais-pagination /></div>
    
  </ais-instant-search>
</div>
</template>
 
<script>
import algoliasearch from 'algoliasearch/lite';

export default {
  data() {
    return {
      searchClient: algoliasearch(
        'C0KX7D5HKD',
        '1b5e8da4cd46af57dfca5096d4aeb13f'

      ),
    };
  },
  
};
</script>
