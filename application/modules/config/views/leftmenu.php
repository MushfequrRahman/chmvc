<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
    
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">Codeigniter</li>
        <?php if($this->session->userdata('userid') && $this->session->userdata('usertype')==1)
		{?>
       
        <li class="treeview">
        	<a href="#">
            	<i class="fa fa-info" aria-hidden="true"></i><span>Basic Info</span>
            	<span class="pull-right-container">
              		<i class="fa fa-angle-left pull-right"></i>
            	</span>
          	</a>
          	<ul class="treeview-menu">
            	<li class="treeview">
        			<a href="#">
            			<i class="fa fa-users"></i> <span>User Info</span>
            			<span class="pull-right-container">
              			<i class="fa fa-angle-left pull-right"></i>
            			</span>
          			</a>
          			<ul class="treeview-menu">
                        <li><a target="_blank" href="<?php echo base_url();?>backend/Dashboard/user_list"><i class="fa fa-circle-o"></i> User List</a></li>
                    </ul>
       			</li>
            </ul>
        </li>
        <?php
		}
		
		
		?>

<?php if($this->session->userdata('userid') && $this->session->userdata('usertype')==2)
		{?>
       
        <li class="treeview">
        	<a href="#">
            	<i class="fa fa-info" aria-hidden="true"></i><span>Config Info</span>
            	<span class="pull-right-container">
              		<i class="fa fa-angle-left pull-right"></i>
            	</span>
          	</a>
          	<ul class="treeview-menu">
            	<li class="treeview">
        			<a href="#">
            			<i class="fa fa-users"></i> <span>Config Info</span>
            			<span class="pull-right-container">
              			<i class="fa fa-angle-left pull-right"></i>
            			</span>
          			</a>
          			<ul class="treeview-menu">
                        <li><a target="_blank" href="<?php echo base_url();?>backend/Dashboard/user_name"><i class="fa fa-circle-o"></i>User Name</a></li>
                        
            		</ul>
       			</li>
            </ul>
        </li>
        <?php
		}
		
		
		?>
        
        
        
        
        
        															
       
        
      
        
       
        
        
        												
        
        
     </ul>
  </section>
    <!-- /.sidebar -->
  </aside>