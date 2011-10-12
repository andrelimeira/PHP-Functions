<?php

          /**
           * Aplica uma m�scara em uma string passada como par�metro, retornando
           * a string formatada para a m�scara tamb�m passada como par�metro
           * 
           * Copyright (C) <2011-2012>  <Andrey Knupp Vital>
           *
           * This program is free software: you can redistribute it and/or modify
           * it under the terms of the GNU General Public License as published by
           * the Free Software Foundation, either version 3 of the License, or
           * (at your option) any later version.
           *
           * This program is distributed in the hope that it will be useful,
           * but WITHOUT ANY WARRANTY; without even the implied warranty of
           * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
           * GNU General Public License for more details.
           *
           * You should have received a copy of the GNU General Public License
           * along with this program.  If not, see <http://www.gnu.org/licenses/>.
           * @param  String $value
           * @param  String|Integer $mask
           * @param  String|Integer $delimiter
           * @return String
           */
          function Mask ( $value , $mask , $delimiter = '#' ) {
                 if ( empty ( $value ) ) throw new InvalidArgumentException ( 'N�o temos uma string para ser m�scarada' );
                 if ( empty ( $mask ) ) throw new InvalidArgumentException ( 'N�o foi definida uma m�scara' );
                 $data = Array( );
                 $k;
                 $value = ( string ) $value;
                 for ( $i = 0; $i <= strlen ( $mask ) - 1;  ++ $i ) {
                        if ( $mask[ $i ] == $delimiter ) {
                               if ( isset ( $value[ $k ] ) )
                                      $data[ ] = $value[ $k ++ ];
                        } else
                        if ( isset ( $mask[ $i ] ) )
                               $data[ ] = $mask[ $i ];
                 }
                 return implode ( $data );
          }